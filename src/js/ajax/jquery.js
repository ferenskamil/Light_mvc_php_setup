$('#jquery-get-btn').on('click', function () {
	$.ajax({
		url: 'http://localhost:8000/api/users',
		method: 'get',
		dataType: 'json',
	}).done((res) => {
		const usersArr = Object.values(res);

		usersArr.forEach((el) => {
			const { id, username, password, registered_at } = el;

			printUsers(id, username, password, registered_at);
		});
	});
});
