import mysql.connector

# Verbindung zur Datenbank herstellen
mydb = mysql.connector.connect(
  host="localhost",
  user="yourusername",
  password="yourpassword",
  database="mydatabase"
)

# Cursor-Objekt erstellen
mycursor = mydb.cursor()

# Datenbankabfrage ausführen
mycursor.execute("SELECT * FROM customers")

# Ergebnis der Abfrage abrufen
myresult = mycursor.fetchall()

# Ergebnis ausgeben
for x in myresult:
  print(x)
