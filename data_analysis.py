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


.pg {
  width: 100%;
  background-color: #ddd;
}


.mybr1 {
text-align: center;
 width: 1%;
  height: 30px;
  background-color: yellow;
}

.mybr2 {
text-align: center;
 
  width: 1%;
  height: 30px;
  background-color: green;
}

.mybr3 {
text-align: center;
 
  width: 1%;
  height: 30px;
  background-color: red;
}
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
  top: 0;
  padding: 5px;
  background-color: #cae8ca;
  border: 2px solid #4CAF50;
}

p.indent{ padding-left: 1.8em }
</style>


</head>
<body>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    
""")


import cgi

import mysql.connector

form = cgi.FieldStorage()
session = form.getvalue("session")
branch = form.getvalue("branch")
sem = form.getvalue("sem")
subject = form.getvalue("subject")


def htmlBottom():
    print("""

<br> 
<br> 
<br> 
<br>
""")

    print("""       
	</body></html>
  """)


def connectDB():
    con = mysql.connector.connect(user='root', password='', host='localhost', database='result_demo')
    cur = con.cursor()
    return con, cur

def select(con, cur):
    sec_A = """
    select DISTINCT COUNT(*) from MASTER_TABLE where 
    (
    SESSION= {}  AND BRANCH_CODE = {} and SEMESTER= {} AND SUBJECT_CODE = '{}' AND SECTION ='A') """.format(session,branch,sem,subject)
    cur.execute(sec_A)
    myresult = cur.fetchall()
    sec_A_total_students=myresult[0][0]
    #print(sec_A_total_students)

    sec_B = """
     select DISTINCT COUNT(*) from MASTER_TABLE where 
        (
        SESSION= {}  AND BRANCH_CODE = {} and SEMESTER= {} AND SUBJECT_CODE = '{}' AND SECTION ='B') """.format(session,branch,sem,subject)
    cur.execute(sec_B)
    myresult = cur.fetchall()
    sec_B_total_students = myresult[0][0]
    #print(sec_B_total_students)

    sec_C = """
        select DISTINCT COUNT(*) from MASTER_TABLE where 
        (
        SESSION= {}  AND BRANCH_CODE = {} and SEMESTER= {} AND SUBJECT_CODE = '{}' AND SECTION ='C') """.format(session,
                                                                                                                branch,
                                                                                                                sem,
                                                                                                                subject)
    cur.execute(sec_C)
    myresult = cur.fetchall()
    sec_C_total_students = myresult[0][0]
    #print(sec_C_total_students)

    sec_D = """
           select DISTINCT COUNT(*) from MASTER_TABLE where 
           (
           SESSION= {}  AND BRANCH_CODE = {} and SEMESTER= {} AND SUBJECT_CODE = '{}' AND SECTION ='D') """.format(
        session,
        branch,
        sem,
        subject)
    cur.execute(sec_D)
    myresult = cur.fetchall()
    sec_D_total_students = myresult[0][0]
    #print(sec_D_total_students)

    fail_1 =  """
           select COUNT(*) from MASTER_TABLE where 
           (
           SESSION= {}  AND BRANCH_CODE = {} and SEMESTER= {} AND SUBJECT_CODE = '{}' AND SECTION ='A' AND GRADE ='F') """.format(
        session,
        branch,
        sem,
        subject)
    cur.execute(fail_1)
    fail_1=cur.fetchall()
    sec_A_fail=fail_1[0][0]


    fail_1 = """
             select COUNT(*) from MASTER_TABLE where 
             (
             SESSION= {}  AND BRANCH_CODE = {} and SEMESTER= {} AND SUBJECT_CODE = '{}' AND SECTION ='B' AND GRADE ='F') """.format(
        session,
        branch,
        sem,
        subject)
    cur.execute(fail_1)
    fail_1 = cur.fetchall()
    sec_B_fail = fail_1[0][0]

    fail_1 = """
             select COUNT(*) from MASTER_TABLE where 
             (
             SESSION= {}  AND BRANCH_CODE = {} and SEMESTER= {} AND SUBJECT_CODE = '{}' AND SECTION ='C' AND GRADE ='F') """.format(
        session,
        branch,
        sem,
        subject)
    cur.execute(fail_1)
    fail_1 = cur.fetchall()
    sec_C_fail = fail_1[0][0]


    fail_1 = """
             select COUNT(*) from MASTER_TABLE where 
             (
             SESSION= {}  AND BRANCH_CODE = {} and SEMESTER= {} AND SUBJECT_CODE = '{}' AND SECTION ='D' AND GRADE ='F') """.format(
        session,
        branch,
        sem,
        subject)
    cur.execute(fail_1)
    fail_1 = cur.fetchall()
    sec_D_fail = fail_1[0][0]
    return sec_A_total_students,sec_B_total_students,sec_C_total_students,sec_D_total_students,sec_A_fail,sec_B_fail,sec_C_fail,sec_D_fail





def print_data(s1_total,s2_total,s3_total,s4_total,fail1,fail2,fail3,fail4):
    print("""
    <div style="border: 15px SOLID grey" >
    <br><table width="80%" id="tableID" align="center">
    
    <center>
    <tr style="background-color: lightgrey" >
    <th width="100">SR. NO.</th> <th width="250">TEACHER NAME</th><th width="100">SECTION</th><th width="250">TOTAL STUDENTS</th> <th width="100">PASS</th> <th width="100">FAIL</th> <th width="100">PASS %</th></tr>
   
    """)
    try:
        x = round(((s1_total-fail1)/s1_total)*100,2)
    except:
        x= 0
    print("<tr>")
    print("<th align =\"center\" style=\"background-color: lightblue\">1</th>")
    print("<th align =\"center\">SHYAMU</th>")
    print("<th align =\"center\">A</th>")
    print("<th align =\"center\" style=\"background-color: yellow\" >{}</th>".format(s1_total))
    print("<th align =\"center\" style=\"background-color: lightgreen\">{}</th>".format(s1_total-fail1))
    print("<th align =\"center\" style=\"background-color: red\">{}</th>".format(fail1))
    print("<th align =\"center\" style=\"background-color: pink\">{}</th>".format(x))
    print("</tr>")

    try:
        x = round(((s2_total - fail2) / s2_total) * 100, 2)
    except:
        x = 0
    print("<tr>")
    print("<th align =\"center\" style=\"background-color: lightblue\">2</th>")
    print("<th align =\"center\">JAY</th>")
    print("<th align =\"center\">B</th>")
    print("<th align =\"center\" style=\"background-color: yellow\">{}</th>".format(s2_total))
    print("<th align =\"center\" style=\"background-color: lightgreen\">{}</th>".format(s2_total-fail2))
    print("<th align =\"center\" style=\"background-color: red\">{}</th>".format(fail2))
    print("<th align =\"center\" style=\"background-color: pink\">{}</th>".format(x))
    print("</tr>")

    try:
        x = round(((s3_total - fail3) / s3_total) * 100, 2)
    except:
        x = 0
    print("<tr>")
    print("<th align =\"center\" style=\"background-color: lightblue\">3</th>")
    print("<th align =\"center\">VEERU</th>")
    print("<th align =\"center\">C</th>")
    print("<th align =\"center\" style=\"background-color: yellow\">{}</th>".format(s3_total))
    print("<th align =\"center\" style=\"background-color: lightgreen\">{}</th>".format(s3_total-fail3))
    print("<th align =\"center\" style=\"background-color: red\">{}</th>".format(fail3))
    print("<th align =\"center\" style=\"background-color: pink\">{}</th>".format(x))
    print("</tr>")

    try:
        x = round(((s4_total - fail4) / s4_total) * 100, 2)
    except:
        x = 0
    print("<tr>")
    print("<th align =\"center\" style=\"background-color: lightblue\">4</th>")
    print("<th align =\"center\">MINTU</th>")
    print("<th align =\"center\">D</th>")
    print("<th align =\"center\" style=\"background-color: yellow\">{}</th>".format(s4_total))
    print("<th align =\"center\" style=\"background-color: lightgreen\">{}</th>".format(s4_total-fail4))
    print("<th align =\"center\" style=\"background-color: red\">{}</th>".format(fail4))
    print("<th align =\"center\" style=\"background-color: pink\">{}</th>".format(x))
    print("</tr>")
    print("</center></tbody></table>")





# con.commit()
# cur.close()
# con.close()
print("<br>")

def columns_chart(p1,p2,p3,p4,f1,f2,f3,f4):
    print("<br><center>")
    print("""<button onclick="abcd({},{},{},{},{},{},{},{})">click here for column chart</button></center>
        <button><a href='data_analysis.php'>Another Result</a></button>
<br><br>""".format(p1,p2,p3,p4,f1,f2,f3,f4))
    print("""
    <!DOCTYPE HTML>
<html>
<head>  
<meta charset="UTF-8">
<script>
function abcd(p1,p2,p3,p4,f1,f2,f3,f4){

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text: "Section Wise Result"
	},	
	axisY: {
		title: "Percentage",
		titleFontColor: "#4F81BC",
		lineColor: "#4F81BC",
		labelFontColor: "#4F81BC",
		tickColor: "#4F81BC"
	},
	toolTip: {
		shared: true
	},
	legend: {
		cursor:"pointer",
		itemclick: toggleDataSeries
	},
	data: [{
		type: "column",
		name: "Pass %",
		legendText: "Pass %",
		showInLegend: true, 
		dataPoints:[
			{ label: "SECTION A", y: p1 },
			{ label: "SECTION B", y: p2 },
			{ label: "SECTION C", y: p3 },
			{ label: "SECTION D", y: p4 },
			
		]
	},
	{
		type: "column",	
		name: "Fail %",
		legendText: "Fail %",
		showInLegend: true,
		dataPoints:[
			{ label: "SECTION A", y: f1 },
			{ label: "SECTION B", y: f2 },
			{ label: "SECTION C", y: f3 },
			{ label: "SECTION D", y: f4 },
			
		]
	}]
});
chart.render();

function toggleDataSeries(e) {
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else {
		e.dataSeries.visible = true;
	}
	chart.render();
}

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 380px; max-width: 920px; margin: 0px auto;"></div>
<script src="../../canvasjs.min.js"></script>

""")

# print("the connection is closed")




if __name__ == "__main__":
    htmlTop()
    db, cursor = connectDB()
    s1_total,s2_total,s3_total,s4_total,fail1,fail2,fail3,fail4 = select(db, cursor)
    try:
        sec1_pass_per = round(((s1_total - fail1) / s1_total) * 100, 2)
        fail1_per = 100 - sec1_pass_per
    except:
        sec1_pass_per = 0

    try:
        sec2_pass_per = round(((s2_total - fail2) / s2_total) * 100, 2)
        fail2_per = 100 - sec2_pass_per
    except:
        sec2_pass_per = 0

    try:
        sec3_pass_per = round(((s3_total - fail3) / s3_total) * 100, 2)
        fail3_per = 100 - sec3_pass_per
    except:
        sec3_pass_per = 0

    try:
        sec4_pass_per = round(((s4_total - fail4) / s4_total) * 100, 2)
        fail4_per = 100 - sec4_pass_per
    except:
        sec4_pass_per = 0

    print("<h3><center>Data Analysis for <b><mark>{}<mark></b></center></h3>".format(subject))
    print_data(s1_total,s2_total,s3_total,s4_total,fail1,fail2,fail3,fail4)
    columns_chart(sec1_pass_per,sec2_pass_per,sec3_pass_per,sec4_pass_per,fail1_per,fail2_per,fail3_per,fail4_per)
    #pie_chart()
    htmlBottom()