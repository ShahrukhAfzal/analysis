#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
Created on Thu Mar 14 20:19:06 2019

@author: shah
"""

#this is the table code

#import testing


import pandas as pd

#Shikher#new_data = pd.read_html("https://erp.aktu.ac.in/WebPages/OneView/OVEngine.aspx?enc=NnCOpTxI4+e2v6OtxoLaIeqDpr9+sc6S5WyBjjX1ahpZtEMK7+d76TQR8rRegmsO") 
#new_data = pd.read_html("https://erp.aktu.ac.in/WebPages/OneView/OVEngine.aspx?enc=NnCOpTxI4+e2v6OtxoLaIdSyYMunAyDn9PkMe5nhW12FIv9ASvKLuJ1G8ZtYy3OU")
#new_data = pd.read_html("https://erp.aktu.ac.in/WebPages/OneView/OVEngine.aspx?enc=NnCOpTxI4+e2v6OtxoLaIVWMgsJrYO6gY2pQFjjAmuehTQTaFSmG8cBBK5FopQxv")
#new_data= pd.read_html("https://erp.aktu.ac.in/WebPages/OneView/OVEngine.aspx?enc=NnCOpTxI4+e2v6OtxoLaIbpLh1toAOQr5qcBuRgGZv9qYMYs/oyXtgeCbT/XR6Qp")
new_data = pd.read_html("https://erp.aktu.ac.in/WebPages/OneView/OVEngine.aspx?enc=NnCOpTxI4+e2v6OtxoLaIVX7lH9443fqzAwlEBEIhjbkUSlfwBRn0Nj6vD8pydWg")


def sem_data(arg):
    a=[]
    for i in range(8,len(arg),7):
        a.append(arg[i])

    for j in range(11,len(arg),7):
        a.append(arg[j])
    return a

#this function(na_fill)  is required in 2015 B.Tech/M.B.A./Others and prior batches
def na_fill(args):
    for each in args:
        each.fillna(value=0,inplace=True)
    return args

def personal_data(arg):
    course = arg[2][2][2]
    name = arg[2][2][4]
    roll_no = arg[2][2][3]
    branch = arg[2][5][2]
    college = arg[2][2][1]
    gender = arg[2][5][5]
    return roll_no, name, branch, gender, course, college


roll_no, name, branch, gender, course, college = personal_data(new_data)
# last modified March 6, 13:25

branch_code = branch[1:3]


def final_sem(raw_sem):
    z=[]
    sem1 = 0
    sem2 = 0
    sem3 = 0 
    sem4 = 0 
    sem5 = 0
    sem6 = 0
    sem7 = 0
    sem8 = 0
    for j in range(len(raw_sem)-1):
        if ((raw_sem[j][0][7][3])=='1'):
            sem1=(raw_sem[j])
            
        elif((raw_sem[j][0][7][3])=='2'):
            sem2=(raw_sem[j])
            #
        elif((raw_sem[j][0][7][3])=='3'):
            sem3=(raw_sem[j])
            #z.append(sem3)
        elif((raw_sem[j][0][7][3])=='4'):
            sem4=(raw_sem[j])
            #z.append(sem4)
        elif((raw_sem[j][0][7][3])=='5'):
            sem5=(raw_sem[j])
            #z.append(sem5)
        elif((raw_sem[j][0][7][3])=='6'):
￼
            sem6=(raw_sem[j])
            #z.append(sem6)
        elif((raw_sem[j][0][7][3])=='7'):
            sem7=(raw_sem[j])
            #z.append(sem7)
        elif((raw_sem[j][0][7][3])=='8'):
            sem8=(raw_sem[j])
            #z.append(sem8)
    try:
        if len(sem1) != 1:    
            z.append(sem1)
    except:
        pass
    try:    
        if len(sem2) != 1:
            z.append(sem2)
    except:
        pass    
    try:
        if len(sem3) != 1:
            z.append(sem3)
    except:
        pass
    try:
        if len(sem4) != 1:
            z.append(sem4)
    except:
        pass
    try:    
        if len(sem5) != 1:
            z.append(sem5)
    except:
        pass
    try:
        if len(sem6) != 1:
            z.append(sem6)
    except:
        pass
    try:
        if len(sem7) != 1:
            z.append(sem7)
    except:
        pass
    try:
        if len(sem8) != 1:
            z.append(sem8)
    except:
        pass
    return z 


view_back=lambda sem: sem[0][sem[6]== 'F']

a=na_fill(sem_data(new_data))
b=final_sem(a)


def back():
    try:
        back1 = view_back(b[0])
    except:
        print("no back in sem1")

    try:
        back2 = view_back(b[1])
    except:
        print("no back in sem2")

    try:
        back3 = view_back(b[2])
    except:
        print("no back in sem3")


    try:
        back4 = view_back(b[3])
    except:
        print("no back in sem4")

    try:
        back5 = view_back(b[4])
    except:
        print("no back in sem5")

    try:
        back6 = view_back(b[5])
    except:
        print("no back in sem6")

    try:
        back7 = view_back(b[6])
    except:
        print("no back in sem7")

    try:
        back8 = view_back(b[7])
    except:
        print("no back in sem8")

def fill_sem():
    try:
        sem1=b[0]
    except:
        pass    

    try:
        sem2=b[1]
    except:
        pass 

    try:
        sem3=b[2]
    except:
        pass        

    try:
        sem4=b[3]
    except:
        pass 

    try:
        sem5=b[4]
    except:
        pass 

    try:
        sem6=b[5]
    except:
        pass 

    try:
        sem7=b[6]
    except:
        pass

    try:
        sem8=b[7]
    except:
        pass          

fill_sem()

import mysql.connector

con = mysql.connector.connect(user='root', password='', host='localhost', database='result_demo')
cur = con.cursor()


session = roll_no[:2]
section = 'a'







