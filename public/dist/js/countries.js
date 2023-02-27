"use strict";

// States
var s_a = new Array();
s_a[0]="Alabama|Alaska|Arizona|Arkansas|California|Colorado|Connecticut|Delaware|District of Columbia|Florida|Georgia|Hawaii|Idaho|Illinois|Indiana|Iowa|Kansas|Kentucky|Louisiana|Maine|Maryland|Massachusetts|Michigan|Minnesota|Mississippi|Missouri|Montana|Nebraska|Nevada|New Hampshire|New Jersey|New Mexico|New York|North Carolina|North Dakota|Ohio|Oklahoma|Oregon|Pennsylvania|Rhode Island|South Carolina|South Dakota|Tennessee|Texas|Utah|Vermont|Virginia|Washington|West Virginia|Wisconsin|Wyoming";


function populateStates(){
	var state_arr = s_a[0].split("|");
	var stateList = "";
	for (var i=0; i<state_arr.length; i++) {
		var state = "<option value='" + state_arr[i] + "'>" + state_arr[i] + "</option>";
		stateList += state;
	}
	return stateList;
}

