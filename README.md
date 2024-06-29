# La Giardiniera Management

## Description:
This project is a management system that collects user-entered data and sends it to the database. Before starting, we realized that the HTML file was too lengthy, so we rewrote it in PHP to optimize it. Subsequently, we developed the necessary files to manage data transmission to the database.

## Contributors

The project was developed with contributors from:

-**Lead Developer**: [Pierpaolo Giangravè](https://github.com/Pierpyg)

-**Contributors**:
    -[Tommaso Lacalamita](https://github.com/tommlak)
    -[Vincenzo Sarrica](https://github.com/theblackster)
    -[Ilariaelena Cilli](https://github.com/Ilaria1800)
    -[Giulia Anfuso](https://github.com/giulianfuso)
    
    
## Detailed Description
This project was commissioned by an Italian company. All specific references to the company have been removed (the name LaGiardiniera is fictitious). Some parts of the project have been translated into English, while others remain in Italian, such as the product names and the field names used for sending data to the server.

The files of this project are organized into 5 main folders:

-tableLaGiardiniera_1 and tableLaGiardiniera_2: Contain the 12 original HTML files, 6 files in each folder.

-CSS1 and CSS2: Contain the CSS files. CSS1 is associated with the first 6 HTML files, while CSS2 is associated with the other 6.

-PHPFolder: Contains two subfolders, LaGiardiniera_1 and LaGiardiniera_2, representing the work done. Each subfolder contains 6 further subfolders, one for each HTML file. 
 The structure of each subfolder is as follows:

    -SQL file: For creating the tables in the database.
    -tableX.php: Almost identical to the original HTML file.
    -tableX_rows.php: Automatically generates the table rows. This file was introduced to simplify code management, avoiding the copy-paste present in the original code.    
     (In LaGiardiniera_2, order5_rows.php is not present because the code was very short and did not require separate management).
    -TableDataX.php: Manages sending the form data to the database.


## FILE:
## LaGiardiniera_1
### Folder table1
#### table1.php:

The PHP file is a modified version of the original, keeping the structure and aesthetics of the page unchanged, except for the management of the table rows and the position of the "submit" and "reset" buttons. The dynamic generation of table rows has been delegated to the table1_rows.php file, while the "submit" and "reset" buttons have been moved to the center for better usability. The rest of the layout remains unchanged from the original file.

#### table1_rows.php:
The following PHP file is responsible for dynamically generating rows of an HTML table based on an array of items. Each item contains an ID, a unit of measure, and a description. The code loops through the $items array, creating a table row for each item. Each row includes input fields for the item's quantity, as well as hidden fields that store the item's ID, unit of measure, and description. These data will be sent to the server when the form is submitted.

#### TableData1.php
The following PHP file manages the submission of data from an HTML form to a MySQL database. Initially, it establishes a connection to the database. Once data is received via a POST request, it inserts them into the database. The data includes general information (Italian labels on the left, corresponding attributes in English on the right):
data = date;
puntovendita = store;
nomerichiedente = requestor's name;
note = notes;
firmarichiedente = applicant signature;
firmaufficioacquisti = purchasing signature;
numero = number (N°)
quantita = quantity;
um = U.M.
descrizionemerce = item description;

### Forlder table2
#### table2.php
The logic is similar to table1.php

#### table2_rows.php
A for loop was used here to generate 50 rows

#### TableData2.php
The logic is similar to TableData1.php, but it utilizes a function (calcolaPrezziEMargini) to perform calculations based on the specified purchase and sale prices and VAT. The information included is:
azienda = company;
prodotti = products;
ivaacquisto = VAT % (second column);
prezzoacquisto = purchase price;
prezzo_ivato_acquisto = price including VAT (fourth column);
ivavendita = VAT % (sixth column);
prezzovendita = selling price;
prezzo_ivato_vendita = price including VAT (eight column);
unitaacquisto = units (fifth column);
unitavendita = units (ninth column);
margine_percentuale = margin %;
margine_euro = margin in €;

#### Other Folders
the files in table3 , table4, table5, table6 are the same as table1

## LaGiardiniera_2
### Folder order1
#### order1.php
The file is similar to the original HTML

#### order1_rows.php
This file generates rows from two different tables

#### OrderData1.php
Sends the data to the database and calculates the total for each column in the respective tables. After sending the data it redirects to the next page. The items sent to the database are:
conferma_ordine_pv = order confirmation store;
giorno_arrivo = arrival day;
data_arrivo = arrival date;
nome_prodotto = column: 'pasta pronto';
quantita_monouso_1 = column: 'monouso 1 prz.';
quantita_monouso_2 = column: 'monouso 2 prz.';
quantita_monouso_4 = column: 'monouso 4 prz.';
quantita_monouso_6 = column: 'monouso 6 prz.';
nome_prodotto_2 = second column: 'pasta pronta';
quantita_tegamini = column: tegamini;
note = notes;
nome_responsabile_pv = name;
firma_responsabile_pv = signature

### Folder order2, order3, order5

The logic is the same as order1, with some differences

### Folder order4
#### order4_rows.php
This PHP file dynamically generates two sections of HTML tables for order creation. Each section contains a dropdown menu that allows selecting the desired quantity for each listed product, with multiples of 10, 12, 13, and 16.

### Folder yogurtorder
#### YogurtData.php
The data sent to the server are:
conferma_ordine_pv = store;
n_ordine = order n°;
cod_cli = cli. cod.
giorno_arrivo = day;
data_arrivo = date;
ora = hour;
carico = stock;
tot_mozz_kg = tot. mozz. kg; 
note = notes;
f_resp_cons_1 = delivery manager's signature (first);
f_autista = driver's legible signature;
f_uff_vend = legible signature sales office
apertura_ord = order opening;
f_resp_cons_2 = delivery manager's signature (second);
f_autista_2 = driver's legible signature
chiusura_ord = order closure
categoria is one of the 6 column header: 'prodotti', 'yogurt kg 3', 'particolarità ricotte', 'yogurt g 140', 'polistiroli con ghiaccio', 'confezionamento'
nome_prodotti = the first column of every table, under the column header
kg = kg
quantita = X
