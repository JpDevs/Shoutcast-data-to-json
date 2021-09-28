# Shoutcast para Json.


![GitHub repo size](https://img.shields.io/github/repo-size/JpDevs/Shoutcast-data-to-json?style=for-the-badge)
![GitHub language count](https://img.shields.io/github/languages/count/JpDevs/Shoutcast-data-to-json?style=for-the-badge)
![GitHub forks](https://img.shields.io/github/forks/JpDevs/Shoutcast-data-to-json?style=for-the-badge)
![Bitbucket open issues](https://img.shields.io/bitbucket/issues/JpDevs/Shoutcast-data-to-json?style=for-the-badge)
![Bitbucket open pull requests](https://img.shields.io/bitbucket/pr-raw/JpDevs/Shoutcast-data-to-json?style=for-the-badge)

<img src="https://image.prntscr.com/image/oLQVT0X2SGWzICHXrr-3uA.png">

> Essa aplicação pega os dados da sua stream shoutcast e os transforma em json, para que você possa implementar em suas aplicações como uma api.

## 💻 Pré-requisitos

Antes de começar, verifique se você atende aos seguintes requisitos:
* PHP 7+
* Compatibilidade com Json
* Request's liberados no firewall

## 🚀 Configurando a aplicação

Para configurar a aplicação, siga os passos abaixo

1º - Abra o arquivo config.php em seu editor de código.
<br>
<img src="https://image.prntscr.com/image/fBhGaMwoRg-Y3WGIUEit2Q.png"></img>
<br>
2º - Altere os valores das váriaveis ip e porta para os respectivios dados da sua stream.
```php
$ip = "SEU IP"; //ip da sua stream shoutcast (OBS: sem http://)
$porta = "PORTA "; // porta da sua stream.
```

OBS: caso o url do seu shoutcast seja em ssl, mude o valor da várivel ssl para 1.
```PHP
$ssl = 1;
```

Após isso, sua aplicação está pronta para uso, basta criar uma requisição e utilizar.

# Exemplos de uso
Mostrarei abaixo uma demonstração de como implementar essa api com o PHP.

```PHP
<?php
//Método cURL, caso a api esteja hospedada. Faz a requisição para o URL desejado. (Usar apenas URL)
$ch = curl_init("Link da API");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);
$json = curl_exec ($ch);
curl_close($ch);

$api = json_decode($json, true); //decodifica o json e o transforma em associativo.

echo "<b>Ouvintes Atuais: </b>" . $api['CURRENTLISTENERS'] . "<br>";
echo "<b>Tocando Agora: </b>" . $api['SONGTITLE'];
?>

```
Caso não queira usar o cURL, você pode usar o file_get_contents
```PHP
$json = file_get_contents("Link ou caminho da API"); //Metodo File_get, funciona tanto em URL quanto em caminho de arquivo

$api = json_decode($json,true); //decodifica o json e o transforma em associativo.

echo "<b>Ouvintes Atuais: </b>" . $api['CURRENTLISTENERS'] . "<br>";
echo "<b>Tocando Agora: </b>" . $api['SONGTITLE'];
?>
```

## 📝 Licença

Esse projeto está sob licença MIT. Veja o arquivo LICENSE para mais detalhes.

## JpDevs
