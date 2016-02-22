<?php

class CtrlProduto {
    public function valida(Produto $produto){
        $erros = "";
        if ($produto->getDescricao() == ""){
            $erros .= "Descrição em branco. <br>";
        }

        if ($produto->getPreco() == ""){
            $erros .= "Preço em branco. <br>";
        }

        if ($produto->getTipo() == ""){
            $erros .= "Tipo não seleicionado. <br>";
        }


	//$produto->getFoto() = $_FILES["foto"];

	// Se a foto estiver sido selecionada
	if (empty($produto->getFoto())) {
            $erros .= "Campo foto vazio. <br>";
        } else {
            // Recupera os dados dos campo;
            $foto = $produto->getFoto();

            // Largura máxima em pixels
            $largura = 280;
            // Altura máxima em pixels
            $altura = 250;
            // Tamanho máximo do arquivo em bytes
            $tamanho = 500;

            // Verifica se o arquivo é uma imagem
            if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $foto["type"])){
               $erros .= "Isso não é uma imagem. <br>";
            }

            // Pega as dimensões da imagem
            $dimensoes = getimagesize($foto["tmp_name"]);

            // Verifica se a largura da imagem é maior que a largura permitida
            if($dimensoes[0] > $largura) {
                    $erros .= "A largura da imagem não deve ultrapassar ".$largura." pixels. <br>";
            }

            // Verifica se a altura da imagem é maior que a altura permitida
            if($dimensoes[1] > $altura) {
                    $erros .= "Altura da imagem não deve ultrapassar ".$altura." pixels. <br>";
            }

            // Verifica se o tamanho da imagem é maior que o tamanho permitido
            if($foto["size"] >= ($tamanho*1024)) {
                    $erros .= "A imagem deve ter no máximo ".$tamanho." KB. <br>";
            }

            // Se não houver nenhum erro
            if ($erros == "") {

                // Pega extensão da imagem
                preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);

                // Gera um nome único para a imagem
                $nome_imagem = md5(uniqid(time())) . "." . $ext[1];

                // Caminho de onde ficará a imagem
                $caminho_imagem = "./view/produtos/" . $nome_imagem;

                // Faz o upload da imagem para seu respectivo caminho
                move_uploaded_file($foto["tmp_name"], $caminho_imagem);

                //altera o nome da imagem;
                $foto["name"] = $nome_imagem;
                $produto->setFoto($foto);
                //var_dump($foto);echo "<br>";
            }
        }

        return $erros;
    }
}

