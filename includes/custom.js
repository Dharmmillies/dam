function checker() {
	var result = confirm('Are you sure you want to submit?');

	if (result == false) {
		event.preventDefault();
	}
}