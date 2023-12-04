//refresh prices
let table=`promo_prices`;
var tbl=[];
$.ajax({
	method: "POST",
	url: "prices.php",
	data: { dbtable: table }
})
.done(function( response ) {
	tbl=JSON.parse(response);
	console.log(tbl);
	if (tbl!=null){
		let i=0;
		while (i< tbl.length){
			let j=Number(tbl[i].order);
	document.getElementById('varname'+j).innerHTML=tbl[i].title;
document.getElementById('AcPr'+j).innerHTML=String(tbl[i].price);
	document.getElementById('OldPr'+j).innerHTML=tbl[i].oldprice;
	document.getElementById('month'+j).innerHTML=tbl[i].months;
	document.getElementById('PrPr'+j).innerHTML=tbl[i].prepay;
	document.getElementById('PR'+j).href=tbl[i].link_ru;
	document.getElementById('PE'+j).href=tbl[i].link_en;
	document.getElementById('Sale'+j).innerHTML=Math.floor(((Number(tbl[i].oldprice)-Number(tbl[i].price))*100)/Number(tbl[i].oldprice));
	i++;
		}
	}
	else{console.log('array not found');}
});

 

function scrollMore() {
    location.hash = "#variants";
	location.hash=null;
}
function scrollFree() {
    location.hash = "#form";
	location.hash=null;
}

function fullform() {
	let name=document.getElementById('name').value;
	let phone=Number(document.getElementById('phone').value);
	let mail=document.getElementById('mail').value;
	let d=new Date();
	let curdate=d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours()+":"+d.getMinutes()+":"+d.getSeconds();
	
	if ((name!=null)&&(phone!=null)&&(mail!=null)){
		$.ajax({
			method: "POST",
			url: "contactssave.php",
			data: { datet: curdate, name: name, phone: phone, mail: mail }
		})
		.done(function( response ) {
			console.log(response);
			if (response=='success') {
				let hide=document.getElementById('form');
				hide.style.display="none";
				alert('Спасибо, мы скоро с Вами свяжемся!');
			}
			else {
				alert('Что-то пошло не так, попробуйте ещё раз!');
			}
		});
	}
	else{alert('Пожалуйста, заполните все поля!');}
}
