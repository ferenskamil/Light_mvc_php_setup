const fetchBtn = document.querySelector('#fetch-get-btn');
// const contentDiv = document.querySelector('#content');

async function getUsersByFetch() {
	try {
		const response = await fetch('http://localhost:8000/api/users');
		const usersObj = await response.json();
		const usersArr = Object.values(usersObj);

		usersArr.forEach((el) => {
			const { id, username, password, registered_at } = el;

			printUsers(id, username, password, registered_at);
		});
	} catch (error) {
		console.error(error);
	}
}

fetchBtn.addEventListener('click', getUsersByFetch);

/** POST */
const fetchAddBtn = document.querySelector('#fetch-add-btn');

async function addNewUserByFetch() {
	const username = document.querySelector('#name').value;
	const password = document.querySelector('#password').value;

	try {
		await fetch(
			`http://localhost:8000/api/users/insert/${username}/${password}`,
			{
				method: 'POST',
				headers: {
					'Content-Type': 'application/x-www-form-urlencoded',
				},
			}
		);
	} catch (error) {
		console.error(error);
	}
}

fetchAddBtn.addEventListener('click', addNewUserByFetch);
