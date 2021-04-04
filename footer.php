    <footer id="pie">
      <p>Monoblock Central Edificio Viejo
      <br>Hecho por Alvaro David Copa Mamani
      <br>Copyright</p>
		</footer>
    <script>
      function colorChange(e){
        switch(e.value){
          case '1':
            document.body.style.backgroundColor = "#6593A6";
            document.body.style.color = "black";
            document.getElementById("cabeza").style.background = "#58595B";
            document.getElementById("pie").style.background = "#58595B";
            document.getElementById("form").style.background = "#58595B";
            break;
          case '2':
            document.body.style.backgroundColor = "#AD1834";
            document.body.style.color = "white";
            document.getElementById("cabeza").style.background = "#F76F88";
            document.getElementById("pie").style.background = "#F76F88";
            document.getElementById("form").style.background = "#F76F88";
            break;
          case '3':
            document.body.style.backgroundColor = "#B9F76F";
            document.body.style.color = "black";
            document.getElementById("cabeza").style.background = "#70AB2B";
            document.getElementById("pie").style.background = "#70AB2B";
            document.getElementById("form").style.background = "#70AB2B";
            break;
          default:
            document.body.style.backgroundColor = "white";
            document.body.style.color = "black";
            document.getElementById("cabeza").style.background = "#333";
            document.getElementById("pie").style.background = "#333";
            document.getElementById("form").style.background = "#ccc";
            break;
        }
      }
      function colorChange2(e){
        switch(e){
          case '1':
            document.body.style.backgroundColor = "#6593A6";
            document.body.style.color = "black";
            document.getElementById("cabeza").style.background = "#58595B";
            document.getElementById("pie").style.background = "#58595B";
            break;
          case '2':
            document.body.style.backgroundColor = "#AD1834";
            document.body.style.color = "white";
            document.getElementById("cabeza").style.background = "#F76F88";
            document.getElementById("pie").style.background = "#F76F88";
            break;
          case '3':
            document.body.style.backgroundColor = "#B9F76F";
            document.body.style.color = "black";
            document.getElementById("cabeza").style.background = "#70AB2B";
            document.getElementById("pie").style.background = "#70AB2B";
            break;
          default:
            document.body.style.backgroundColor = "white";
            document.body.style.color = "black";
            document.getElementById("cabeza").style.background = "#333";
            document.getElementById("pie").style.background = "#333";
            break;
        }
      }
    </script>
  </body>
</html>