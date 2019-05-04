#!/home/shah/yes/bin/python

print("Content-Type: text/HTML")
print()
import cgi

#print("<center><h1>This is your sign up page</h1></center>")
print("<hr/>")


form = cgi.FieldStorage()
'''
user_name ='abcd' #
pwd = 123#
clg = 'qw'#
dept = 'ds'#
type = 222
'''
email = form.getvalue("email")
pwd=form.getvalue("pwd")
name = form.getvalue("name")
clg = form.getvalue("college_code")
gender = form.getvalue("gender")
mobile = form.getvalue("mobile")

#print(user_name,pwd,clg,dept,type)

import mysql.connector

con = mysql.connector.connect(user='root',password='',host='localhost',database='result_demo')
cur = con.cursor()


def create_table_USER():
    cur.execute("""
            CREATE TABLE if not exists USER
            (
             EMAIL varchar(30) NOT NULL,
             PASSWORD varchar(20) NOT NULL,
             USERNAME varchar(20) NOT NULL,
             COLLEGE varchar(5) NOT NULL,
             GENDER varchar(1) NOT NULL,
             MOBILE varchar(10) DEFAULT '0',
             PRIMARY KEY (EMAIL)) """)
    con.commit()


create_table_USER()
try:
    cur.execute("INSERT INTO USER(EMAIL,PASSWORD,USERNAME,COLLEGE,GENDER,MOBILE) values(%s,%s,%s,%s,%s,%s)",tuple(list([email,pwd,name,clg,gender,mobile])))
    #print("<br><br><h1>Successful logged in</h1>")
    print("""
    <body>
    <script>
        alert("Record successfully entered for {}");
    </script>
    </body>
    """.format(email))
    redirectURL = "i.php"
    print('    <meta http-equiv="refresh" content="0;url=' + str(redirectURL) + '" />')
except:
    redirectURL = "member.py"
    print('<html>')
    print('  <head>')
    print("""
    <script>
  alert("PLease enter another username");
  </script>
  """)
    print('    <meta http-equiv="refresh" content="0;url=' + str(redirectURL) + '" />')
    print('  </head>')
    print('</html>')


con.commit()
cur.close()
con.close()