<div id="block-parameter" class="wrapper3 mt-2">
	<div id='block-sort' class="p-2 mb-1">
		<h4 class="col-12 p-0">Рейтинг:</h4>
		<div class="d-flex align-items-center">
			<h6>от: </h6>
			<input id='minprice' class="px-1 ml-1 mr-3" type="text" oninput="this.value = this.value.replace(/[^\d]/g,'');inputMinVal(this)" value="0">
			<h6>до: </h6>
			<input id='maxprice' class="px-1 ml-1 mr-3" type="text" oninput="this.value = this.value.replace(/[^\d]/g,'');inputMaxVal(this)" value="1000000">	
			<button class="btn btn-info" onClick="mySortPrice()">Применить</button>
		</div>
			
	</div>
	<div class="d-flex flex-direction-row justify-content-end col-12 p-0">
		<button class="btn btn-outline-info d-flex btn-sm p-1" onClick="block_show()"><img src="img/settings.png" alt="settings"></button>
		<button class="btn btn-outline-info d-flex btn-sm p-1" onClick="mySortUp()"><img src="img/growup.png" alt="growdown"></button>
		<button class="btn btn-outline-info d-flex btn-sm p-1" onClick="mySortDown()"><img src="img/growdown.png" alt="growdown"></button>	
	</div>
</div>