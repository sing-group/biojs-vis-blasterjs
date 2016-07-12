BlasterJS
=====

### Version
1.0 (July 2016)

### Authors
* Aitor Blanco Míguez (aiblanco@uvigo.es)
* Dr. Anália Maria Garcia Lourenço (analia@uvigo.es)
* Dr. Borja Sánchez García (borja.sanchez@csic.es)
* Dr. Florentino Fernández Riverola (riverola@uvigo.es)

### Description 
BlasterJS is a free to use, open source JS library created by Sing Group.

### Dependences
* Bootstrap 3 ([http://getbootstrap.com/])
* HTML2CANVAS ([http://html2canvas.hertzen.com/])


### Accepted files
BLAST output files -outfmt 0 (Default) 
> Only one query on the BLAST file.   
> You can check [NCBI BLAST user manual].

### How to use
```sh
<head>
    ...
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous" />
</head>
<body>
    ...
    <input type="file" id="blastinput" />
    <div id="blast-multiple-alignments"></div>
    <div id="blast-alignments-table"></div>
    <div id="blast-single-alignment"></div>
    ...
    <script type="text/javascript" src="js/html2canvas.js"></script>
    <script type="text/javascript" src="js/blaster.js"></script>
</body>
```

### Institution
[© SING - Sistemas Informáticos de Nueva Generación 2015]    
Department of Computer Science, University of Vigo    
ESEI - Escuela Superior de Ingeniería Informática Edificio politécnico    
Campus Universitario As Lagoas s/n    
32004 Ourense, Spain    
Tel: +34 988 387 013    
Fax: +34 988 387 001

### TODOs

- Accept more blast output formats.
- Check BioJS compativility

License
----

GNU General Public License v3


   [http://getbootstrap.com/]: <http://getbootstrap.com/>
   [https://html2canvas.hertzen.com/]: <https://html2canvas.hertzen.com/>
   [© SING - Sistemas Informáticos de Nueva Generación 2015]: <http://sing.ei.uvigo.es/>
   [NCBI BLAST user manual]: <http://www.ncbi.nlm.nih.gov/books/NBK279675/>