#importing libraries
from sklearn.externals import joblib
import inputScript

#load the pickle file
classifier = joblib.load('final_models/rf_final.pkl')

#input url
q=open('site.txt',"r")
url=q.read()

#checking and predicting
checkprediction = inputScript.main(url)
prediction = classifier.predict(checkprediction)
p=open('result.txt','w')
#p.write(prediction)

if(prediction == 1):
     p.write("THE SITE A PHISHING SITE :'{")
     p.close()
else:
     p.write("The site is not a phishing site :)") 
     p.close()
