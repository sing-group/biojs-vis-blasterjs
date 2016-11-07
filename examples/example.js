//Simple example
var blasterjs = require("biojs-vis-blasterjs");
var a = document.createElement('a');
a.href='http://sing.ei.uvigo.es/blasterjs/blast.out';
a.setAttribute("target", "_blank");
a.text='Download an example file';
a.setAttribute("download", "blast.out");
var input = document.createElement('input');
input.id = 'blastinput';
input.setAttribute("type", "file");

var multiple = document.createElement('div');
multiple.id = "blast-multiple-alignments";
var table = document.createElement('div');
table.id = "blast-alignments-table";
var single = document.createElement('div');
single.id = "blast-single-alignment";

rootDiv.appendChild(a);
rootDiv.appendChild(document.createElement('br'));
rootDiv.appendChild(document.createElement('br'));
rootDiv.appendChild(input);
rootDiv.appendChild(multiple);
rootDiv.appendChild(table);
rootDiv.appendChild(single);

var instance = new blasterjs({
     input: "blastinput",
     multipleAlignments: "blast-multiple-alignments",
     alignmentsTable: "blast-alignments-table",
     singleAlignment: "blast-single-alignment"
});
