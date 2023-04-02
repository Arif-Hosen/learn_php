<!-- 
    ajax - asynchronous javascript and xml used for dynamic/update content of a web page without reloading. we can request to the server with ajax.

    xhr - XMLHttpRequest() is a object. It is used to interect with server. It canbe used not only xml data but also any kind of data(ex: json).

     XMLHttpRequest.readyState - return the state an xmlhttprequest client. there are multiple state.

     XMLHttpRequest.status - returns the http response status code of request

     XMLHttpRequest.responseText - return the http reponse

     XMLHttpRequest.onreadystatechange - readystatechange event fired when readystate property changed.

     XMLHttpRequest.open() - initialize the request 
     XMLHttpRequest.open() - initialize the request 


 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX PHP</title>
</head>
<body>
<form action="">
<label for="">Search Book</label>
<!-- this refers the object -->
<input type="text" name="book_search" id="book_search" onkeyup="bookList(event)">
</form>

<div>
    <p id="book_list"></p>
</div>

    <script>
        const bookList = (e) => {
            const value = e.target.value;
            if(value.length == 0){
                document.getElementById('book_list').innerHTML="";
                console.log('empty');
                return;
            } 
            else{
                // create xmlhttpRequest object
                let xmlhttpObj = new XMLHttpRequest();

                // when the server response ready
                xmlhttpObj.onreadystatechange = () => {
                    if(xmlhttpObj.readyState == 4 && xmlhttpObj.status == 200){
                        // console.log('server res');
                        document.getElementById('book_list').innerHTML= xmlhttpObj.responseText;
                    }
                }
                // initialize http request
                xmlhttpObj.open("GET", "bookListSuggetion.php?q=" + value,true)
                // send request
                xmlhttpObj.send()
                }
        }
    </script>
</body>
</html>