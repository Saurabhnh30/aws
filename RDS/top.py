import pyodbc 
conn = pyodbc.connect('Driver={SQL Server};Server=myinsta.cd0clzgzuh1o.ap-south-1.rds.amazonaws.com;Database=skp;uid=master;pwd=saurabh101;Trusted_Connection=no;')

cursor = conn.cursor()
cursor.execute('SELECT * FROM dbo.student')
print("Something")

for row in cursor:
    print(row)
