#importing libraries
# from sklearn.external
import joblib
import inputScript
import mysql.connector

#load the pickle file
classifier = joblib.load('final_models/rf_final.pkl')

# forming db connection "localhost","root","","privacyportal",3307
db=mysql.connector.connect(host="localhost",user="root",password="",database="privacyportal",port=3307)
# print(mydb)

# specify a cursor
cursor=db.cursor()

# get the url from db
url="SELECT website_url FROM phishing WHERE type=''"
cursor.execute(url)
result=cursor.fetchall()
for row in result:
    website=row[0]
    # print(website)

# checking and predicition
checkprediction = inputScript.main(website)
prediction = classifier.predict(checkprediction)
if(prediction == 1):
     type_result="THE SITE A PHISHING SITE :'{"
else:
     type_result="The site is not a phishing site :)"

#updating db
type_update='UPDATE phishing SET type="'+type_result+ '" WHERE website_url= "'+website+'"'
try:
    cursor.execute(type_update)
    db.commit()
except:
    db.rollback()

# close connection
db.close()


