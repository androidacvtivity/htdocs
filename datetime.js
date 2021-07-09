var mydate=new Date()
var theYear=mydate.getFullYear()
var day=mydate.getDay()
var month=mydate.getMonth()
var daym=mydate.getDate()
if (daym<10)
daym="0"+daym;
var dayarray=new Array("Duminică","Luni","Marţi","Miercuri","Joi","Vineri","Sâmbătă");
var montharray=new Array("ianuarie","februarie","martie","aprilie","mai","iunie","iulie","august","septembrie","octombrie","noiembrie","decembrie");
document.write(dayarray[day]+", "+daym+" "+montharray[month]+" "+theYear);
