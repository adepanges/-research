function solution(N) {
	var bin = (N >>> 0).toString(2),
		bin_splited = bin.split('1'),
		max_value = '';

	bin_splited.reduce(function(previousValue, currentValue, currentIndex, array){
		var allow = false;
		if(currentIndex!=(array.length-1) && currentIndex!=0){
			allow = true;
		}

		if(currentValue.length > max_value.length && allow){
			max_value = currentValue;
		}
	});

	return max_value.length;
}