import csv
import sys

with open('tokens.csv') as csv_file:
    csv_reader = csv.reader(csv_file, delimiter=',')
    line_count = 0
    for row in csv_reader:
        f = open(row[0]+".json","w+")

        if row[2]:
            f.write("{\"contentId\":\""+row[0]+"\",\"content\":\""+row[2]+"\",\"type\":\""+row[1]+"\",\"fileContents\":\"\"}")
        else:
            f.write("{\"contentId\":\""+row[0]+"\",\"content\":\"\",\"type\":\""+row[1]+"\",\"fileContents\":\"\"}")
        f.close()