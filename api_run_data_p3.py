import json
from flask import Flask, request, render_template
import requests
import csv
from datetime import datetime
from io import StringIO
from werkzeug.wrappers import Response
import mysql.connector


mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  passwd="",
  database="scrape_parsehub_p3"
)
mycursor = mydb.cursor()
#sql = "INSERT INTO scraped_data (product_name, product_url) VALUES (%s, %s)"
#val = (p_name, url)
#mycursor.execute(sql, val)
#mydb.commit()


v=[]
now = datetime.now()
now1="project3_"+str(now)+".csv"

app = Flask(__name__)

@app.route('/')
def my_form():
    return render_template('my-form-api-lastrun.html')
    #return render_template('scraping.html')

@app.route('/', methods=['POST'])
def my_form_post():
    api = request.form['api']
    api1=api.split()
    api_len=len(api1)

    pt = request.form['pt']
    pt1=pt.split()
    pt_len=len(pt1)

    if api_len == pt_len:
        for ii in range(0,api_len):
            params = {"api_key": api1[ii],"format": "json"}
            r = requests.get('https://www.parsehub.com/api/v2/runs/'+pt1[ii]+'/data', params=params)
            #r = requests.get('https://www.parsehub.com/api/v2/projects/'+pt1[ii]+'/last_ready_run/data', params=params)
            #res = res+"\n"+r.text
        y = json.loads(r.text)
        #print(y["age"])
        total_product=len(y["list1"])
        #res=""
        for n in range(0,total_product):
            bulk = y["list1"][n]["bulk"]
            title = y["list1"][n]["title"]
            brand = y["list1"][n]["brand"]
            brand_url = y["list1"][n]["brand_url"]
            mp = (y["list1"][n]["price_note"][0]["price"])
            mp = mp.split()
            mp1 = mp[1].split(',')
            mp2 = "".join(mp1)
            mrp = float(mp2)
            
            pp = (y["list1"][n]["price_note"][1]["price"])
            pp = pp.split()
            pp1 = pp[1].split(',')
            pp2 = "".join(pp1)
            price = float(pp2)
            you_save= str(mrp-price)+' ('+ str(int(((mrp-price)/mrp)*100))+'%)'
            if len(y["list1"][n]) == 10:
                ss_brand = y["list1"][n]["selection2"][0]["product_information"]
                ss_colour = y["list1"][n]["selection2"][1]["product_information"]
                ss_imn = y["list1"][n]["selection2"][6]["product_information"]
                ss_ASIN = y["list1"][n]["selection2"][7]["product_information"]
                ss_cr = y["list1"][n]["selection2"][8]["product_information"]
                ss_bsr = y["list1"][n]["selection2"][9]["product_information"]
                ss_dfa = y["list1"][n]["selection2"][10]["product_information"]
            else:
                ss_brand = ""
                ss_colour = ""
                ss_imn = ""
                ss_ASIN = ""
                ss_cr = ""
                ss_bsr = ""
                ss_dfa = ""
            discription = y["list1"][n]["description"]
            rating_len=len(y["list1"][n]["rating_stars"])
            rating = ["","","","",""]
            for nn in range (0,rating_len):
                rating[nn] = str(y["list1"][n]["rating_stars"][nn]["Rating_ration"])
            img_count = str(len(y["list1"][n]["imagecount"]))
            img_url = y["list1"][n]["image"]
            #res=str('bulk: '+bulk+'<br>'+'title :'+title+'<br>'+'brand :'+brand+'<br>'+'brand url :'+brand_url+'<br>'+'MRP :'+mrp+'<br>'+'Price :'+price+'<br>'+'You Save :'+you_save+'<br>'+'Sel Brand'+ss_brand+'<br>'+'Sel col :'+ss_colour+'<br>'+'Sel IMN :'+ss_imn+'<br>'+'Sel ASIN :'+ss_ASIN+'<br>'+'Sel Cus Rat :'+ss_cr+'<br>'+'Sel BSR :'+ss_bsr+'<br>'+'Sel DFA :'+ss_dfa+'<br>'+'Description :'+discription+'<br>'+'5 %'+rating[0]+'<br>'+'4 %'+rating[1]+'<br>'+'3 %'+rating[2]+'<br>'+'2 %'+rating[3]+'<br>'+'1 %'+rating[4]+'<br>'+'No Img :'+img_count +'<br>'+'Img URL :'+img_url)
            #res=res+str('bulk: '+bulk+'<br>'+'title :'+title+'<br>'+'brand :'+brand+'<br>'+'brand url :'+brand_url+'<br>')
            #res=res+str('MRP :'+str(mrp)+'<br>'+'Price :'+str(price)+'<br>'+'You Save :'+str(you_save)+'<br>')
            #res=res+str('Sel Brand :'+ss_brand+'<br>'+'Sel col :'+ss_colour+'<br>'+'Sel IMN :'+ss_imn+'<br>'+'Sel ASIN :'+ss_ASIN+'<br>'+'Sel Cus Rat :'+ss_cr+'<br>'+'Sel BSR :'+ss_bsr+'<br>'+'Sel DFA :'+ss_dfa+'<br>'+'Description :'+discription+'<br>'+'5 :'+rating[0]+'<br>'+'4 :'+rating[1]+'<br>'+'3 :'+rating[2]+'<br>'+'2 :'+rating[3]+'<br>'+'1 :'+rating[4]+'<br>'+'No Img :'+img_count +'<br>'+'Img URL :'+img_url+'<br>'+'<br>'+'<br>')
            v.append((bulk,title,brand,brand_url,mrp,price,you_save,ss_brand,ss_colour,ss_imn,ss_ASIN,ss_cr,ss_bsr,ss_dfa,discription,rating[0],rating[1],rating[2],rating[3],rating[4],img_count,img_url))
        def generate():
            data = StringIO()
            w = csv.writer(data)

        # write header
            w.writerow(("Bulk","Title","Brand","Brand URL","MRP","Price","You Save","Sel Brand","Sel Colour",
           "Sel Item Model No","Sel ASIN","Sel Customer Rating","Sel BSR","Sel DFA","Description","5 Star",
           "4 Star","3 Star","2 Star","1 Star","No Img","Img URL"))
            yield data.getvalue()
            data.seek(0)
            data.truncate(0)
            # write each log item
            for item in v:
                w.writerow((
                    item[0],item[1],item[2],item[3],item[4],item[5],item[6],item[7],item[8],
                    item[9],item[10],item[11],item[12],item[13],item[14],item[15],item[16],
                    item[17],item[18],item[19],item[20],item[21]
                    ))
                yield data.getvalue()
                data.seek(0)
                data.truncate(0)
            # stream the response as the data is generated
        response = Response(generate(), mimetype='text/csv')
        # add a filename
        sql = "INSERT INTO scraped_data (bulk,title,brand,brand_url,mrp,price,you_save,sel_brand,sel_colour,sel_imn,sel_ASIN,sel_cr,sel_bsr,sel_dfa,description,5_rr,4_rr,3_rr,2_rr,1_rr,imagecount,image) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)"
        mycursor.executemany(sql, v)
        mydb.commit()
        response.headers.set("Content-Disposition", "attachment", filename=now1)
        return response
       
        #return res
        '''
        res1=res.split('"')
        res_len=len(res1)

        for e in range(0,res_len): 
            if res1[e] == "\n": 
                p_name.append(res1[e+1])
        for e in range(2,res_len): 
            if res1[e] == ",": 
                url.append(res1[e+1])

        p_len=len(p_name)
        
        for i in range(0,p_len):
            v.append((p_name[i],url[i]))
            
        def generate():
            data = StringIO()
            w = csv.writer(data)

        # write header
            w.writerow(('Product_name', 'Product_URL'))
            yield data.getvalue()
            data.seek(0)
            data.truncate(0)
            # write each log item
            for item in v:
                w.writerow((
                    item[0],
                    item[1]#.isoformat()  # format datetime as string
                    ))
                yield data.getvalue()
                data.seek(0)
                data.truncate(0)
            # stream the response as the data is generated
        response = Response(generate(), mimetype='text/csv')
        # add a filename
        response.headers.set("Content-Disposition", "attachment", filename=now1)
        return response
        '''
        
    else:
        er="Please provide same number of API_KEY and PROJECT_TOKEN"
        return er

if __name__ == '__main__':
    app.run()    
