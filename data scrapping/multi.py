from bs4 import BeautifulSoup 
from urllib.request import urlopen, Request, urlretrieve
import urllib
import requests 
import pandas as pd
import csv
csv_file = open('finalscrap.csv','w')
csv_writer = csv.writer(csv_file)
csv_writer.writerow(['names','about','image'])
  
# get URL 
url="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=267%3Aacm-student-chapter&catid=2%3A1&Itemid=550","https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=566%3Azena&catid=2%3A1&Itemid=551","https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=568%3Asynergy&catid=2%3A1&Itemid=551","https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=569%3Arahnuma&catid=2%3A1&Itemid=551","https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=476%3Atechnoliteratiash&catid=4%3Aash&Itemid=551","https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=567%3Arotary&catid=2%3A1&Itemid=551","https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=565%3Alean-in&catid=2%3A1&Itemid=550","https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=588%3Aantargat&catid=2%3A1&Itemid=551"
for pg in url:
    # page=requests.get(pg)
    # response = requests.request(url)
    response = requests.request("GET", pg, verify=False)
# scrape webpage 
    soup = BeautifulSoup(response.content, "html.parser") 
# cases=soup.find_all('div',class_='class'="article-content")
    span= soup.find('div',class_='article-content')
    images = soup.find('div',class_='ja-content-main clearfix')
    
    title = soup.find('title')
    title = title.text
# list(soup.children) 
    acm=span.text
    acm=acm.replace('\n',' ')
    
    imagess = soup.find('div',class_='ja-content-main clearfix')
    imagee = imagess.find('img')
    img_name ='http://igdtuw.ac.in'+imagee['src']
  #  print(imagee['src'])
    csv_writer.writerow([title, acm,img_name])
    
  
