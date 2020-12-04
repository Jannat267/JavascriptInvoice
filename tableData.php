<html>
    <body>
        <table border="1px">
            <tr>
                <td class="cell" onclick="Get(this)">AAAA</td>
                <td class="cell" onclick="Get(this)">BBBB</td>
                <td class="cell" onclick="Get(this)">CCCC</td>
                <td class="cell" onclick="Get(this)">DDDD</td>
            </tr>
            <tr>
                <td class="cell" onclick="Get(this)">EEEE </td>
                <td class="cell" onclick="Get(this)">FFFF </td>
                <td class="cell" onclick="Get(this)">GGGG </td>
                <td class="cell" onclick="Get(this)">HHHH </td>
            </tr>
            <tr>
                <td class="cell"onclick="Get(this)">IIII </td>
                <td class="cell"onclick="Get(this)">JJJJ </td>
                <td class="cell"onclick="Get(this)">KKKK </td>
                <td class="cell"onclick="Get(this)">LLLL </td>
            </tr>
        </table><br><br>
        <p id="show"></p>
        <p id="show2"></p>
         <script>
             function Get(x)
             {
                document. getElementById("show").innerHTML=x.innerHTML;
                console.log(x.innerHTML);

                /* var a= document.getElementsByClassName("cell").value;
                 document. getElementById("show2").innerHTML=a[1];
                 var table={
                   ob1:a,
                   ob2: function(){
                       return this.ob1;
                   }
                };
               document. getElementById("show").innerHTML=table.ob2;
             console.log(table);*/
            }
         </script>
    </body>
</html>