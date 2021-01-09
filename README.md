<p align="center" style="color:rgb(225,50,50);font-size: 40px;font-weight: bold"> Inspect | CC414 </p>

<hr style="color:rgb(100,100,100);width:50%;">_____</hr>

### designed and developed By:
#### - Alshaimaa Hossam Mohamed - 17101571
#### - Khaled Ahmed Tag – 16102031

<hr style="color:rgb(100,100,100)">_____</hr>

## Problem Definition:
#### This project aims to facilitate connection between real-estate companies and their clients. It provides a user-friendly web platform for the companies to display their residential or commercial properties. Also, real-estate clients can smoothly browse through the available properties from various companies and get a detailed view of each one of them. 

## Business Rules
-	Each User is identified by an ID, name, Email, Password, a picture,  addresses, timestamps (created/updated), user remember token.


-	Companies are owned by users, each user can own only ONE company, and a company can be owned by ONE user. It isn’t mandatory that a user owns a company.


-	Companies are identified by an ID, name, a picture, timestamps (created/updated), unique slug, phone, address(es), description, picture, phone number(s).


-	Companies can have multiple addresses mapping to multiple branches, each address contains Country, City and street.


-	Each company works on multiple projects. A project is identified by an ID, picture, address, description, timestamps, name, and a unique slug.


-	Each project contains multiple estate properties. An estate is identified by an ID, picture(s), name, type, price, description, block, floor, and timestamps.


-	A company cannot exist without a user, a project surely cannot happen without a company working on it and an estate depends on the project that includes it.

## ER Diagram:

![img_4.png](img_4.png)
<p style="color:rgb(100,100,100);font-size: 30px;">_____</p>

## Relational Mapping:

![img_6.png](img_6.png)
<p style="color:rgb(100,100,100);font-size: 30px;">_____</p>

## Registering as company:
![img_8.png](img_8.png)


### After registration, data is added to the tables successfully. (Comapanies, Phones, Addresses)
![img_10.png](img_10.png)
<br>
<br>
<br>
<hr style="color:rgb(100,100,100);">

### There are many more features,feel free to download the project and explore them.

<hr style="color:rgb(100,100,100);">
<br>
<br>
<br>
