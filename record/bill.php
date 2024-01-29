<html>
    
    <head>
        
        <script type="text/javascript">
            function validation(){
                if(document.forms.form1.item1.value=="")
                {
                    window.alert("enter item 1");
                    document.forms.form1.item1.focus();
                    return false;
                }
                else if(document.forms.form1.item2.value=="")
                {
                    window.alert("enter item 2");
                    document.forms.form1.item1.focus();
                    return false;
                }
                else if(document.forms.form1.item3.value=="")
                {
                    window.alert("enter item 3");
                    document.forms.form1.item1.focus();
                    return false;
                }
                else if(document.forms.form1.item4.value=="")
                {
                    window.alert("enter item 4");
                    document.forms.form1.item1.focus();
                    return false;
                }
                else if(document.forms.form1.item5.value=="")
                {
                    window.alert("enter item 5");
                    document.forms.form1.item1.focus();
                    return false;
                }
                else
                {
                    window.alert("bill generated");
                }
            }
            </script>
    </head>
    
    <style>
        input[ type='submit']{
            
            background-color: coral;
            border-radius: 20% ;
            width: 50;
            height: 30;
            
        }
        
    </style>
    
    <body>
    <center>
        <br><br> 
        <form id="form1" onsubmit="return validation()" method='post' action="bout.php">
            
            <h1 style='color: crimson' ><u>FAMILY MART</u></h1>
            <h3 style='color: darkred'>Fill your Cart</h3>
            <br>
            
            <table border='1' height='250' cellpadding='5'>
                
                <tr >
                    <th width='100'  >Items</th>
                    <th width='50'>Quantity</th>
                    
                </tr>
                
                <tr>
                    <td>Pen</td>
                    <td><input type='number' name='item1'></td>
                    
                </tr>
                <tr>
                    <td>Pencil</td>
                    <td><input type='number' name='item2'></td>
                    
                </tr>
                <tr>
                    <td>Marker</td>
                    <td><input type='number' name='item3'></td>
                    
                </tr>
                <tr>
                    <td>Scale</td>
                    <td><input type='number' name='item4'></td>
                    
                </tr>
                <tr>
                    <td>Box</td>
                    <td><input type='number' name='item5'></td>
                    
                </tr>
                
                <tr>
               
                    <td colspan="2" > <center><input type='submit' name='pay' value="Pay">&nbsp;&nbsp;<input type='reset' name='reset' value="reset"></center></td>
                
                </tr>
                
            </table>
            
        </form>
    </center>
    </body>
    
</html>
