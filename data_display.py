#!/home/shah/yes/bin/python


print("Content-Type: text/html")
print()



def htmlTop():
    print("""

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
<script>
function myFunction() {
  window.print();
}
</script>

<style>

@media print {
    #printbtn {
        display :  none;
    }
}

td,th{
font-weight: bold;
    vertical-align: inherit;
	text-align:center;
border: 1px solid black;
margin: 3px;
}
div.sticky {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  padding: 5px;
  background-color: #cae8ca;
  border: 2px solid #4CAF50;
}

p.indent{ padding-left: 1.8em }
</style>
 <script>
	

function analyze() {
  var v = document.getElementById('input_id').value;
var table = document.getElementById('tableID');
var tbody = table.getElementsByTagName('tbody')[0];
var cells = tbody.getElementsByTagName('td');

for (var i = 0, len = cells.length; i < len; i++) {
if (parseInt(cells[i].innerHTML) >= v) {
    cells[i].style.backgroundColor = 'lightgreen';
  } else if (parseInt(cells[i].innerHTML) < v) {
    cells[i].style.backgroundColor = 'red';
  }
}}
</script>
		
	
</head>
<body>
  <button><a href='data_display.php'>Another Result</a></button>

""")




import cgi

import mysql.connector


form = cgi.FieldStorage()
session = form.getvalue("session")
branch = form.getvalue("branch")
sem = form.getvalue("sem")
section = form.getvalue("section")

subject = form.getvalue("subject")



print("<br>")

def htmlBottom():
    print("""       
	</body></html>
  """)

def connectDB():
    con = mysql.connector.connect(user='root', password='', host='localhost', database='result_demo')
    cur = con.cursor()
    return con, cur




def select(con, cur):
    sql = """
    select ROLL_NO,SUBJECT_CODE,EXTERNAL,SECTION,INTERNAL from MASTER_TABLE where 
    (SESSION= {}  AND BRANCH_CODE = {} and SEMESTER= {} AND SECTION='{}' AND SUBJECT_CODE = '{}') """.format(session,branch,sem,section,subject)
    cur.execute(sql)
    myresult = cur.fetchall()
    total=len(myresult)
    return myresult,total





def print_data(result):
    print("<center style= font:15px>Subject : <mark>{}</mark></center>".format(result[0][1]))
    print("""
   <center>
<form  id="printbtn"> <lable>ENTER PASSING MARKS:</lable> <input type="number" id="input_id" > <button id="printbtn" type="button" class="btn btn-default" style="background-color: lightblue;" onclick="analyze()">ANALYSIS</button> 
</form> <a id="printbtn" href="#" onclick="myFunction()" class="btn btn-default" style="background-color: skyblue">Print</a>
</center> 
<BR>
<div style="border: 15px SOLID grey ">
    <table width="100%" id="tableID">
    <center>
    <tr><th>SR. NO.</th><th >ROLL. NO.</th><th >SECTION</th><th >EXTERNAL</th><th>INTERNAL</th></tr>
    """)
    count=0
    for each in result:
        count+=1

        print("<tr>")
        print("<th align =\"center\">{}</th>".format(count))
        print("<th align =\"center\">{}</th>".format(each[0]))
        print("<th align =\"center\">{}</th>".format(each[3]))
        print("<td align =\"center\">{}</td>".format(each[2]))
        print("<tH align =\"center\">{}</tH>".format(each[4]))
        print("</tr>")

    print("</center></tbody></table>")


if __name__ == "__main__":
    htmlTop()
    db, cursor = connectDB()
    result,total = select(db, cursor)
    print("<center>The total no. of records fetched are <mark><b>",total,"</b></mark></center>")
    print_data(result)
    htmlBottom()
    
# con.commit()
# cur.close()
# con.close()
print("<br>")

# print("the connection is closed")


