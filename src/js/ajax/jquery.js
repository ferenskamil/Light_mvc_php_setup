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

$('#jquery-add-btn').on('click', function () {
	console.log('TEST');

	const username = $('#name').val();
	const password = $('#password').val();

	$.ajax({
		url: `http://localhost:8000/api/users/insert/${username}/${password}`,
		method: 'post',
	});
});
