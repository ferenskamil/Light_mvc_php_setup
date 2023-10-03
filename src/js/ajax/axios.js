const axiosBtn = document.querySelector('#axios-get-btn');

async function getUsersByAxios() {
	try {
		const response = await axios.get('http://localhost:8000/api/users');
		const usersObj = await response.data;
		const usersArr = Object.values(usersObj);

		usersArr.forEach((el) => {
			const { id, username, password, registered_at } = el;
			printUsers(id, username, password, registered_at);
		});
	} catch (error) {
		console.error(error);
	}
}

axiosBtn.addEventListener('click', getUsersByAxios);

/** POST */
const axiosAddBtn = document.querySelector('#axios-add-btn');

async function addUserbyAxios() {
	const username = document.querySelector('#name').value;
	const password = document.querySelector('#password').value;

	try {
		const response = await axios.post(
			`http://localhost:8000/api/users/insert/${username}/${password}`,
			{},
			{
				headers: {
					// 'Content-Type': 'application/json',
					'Content-Type': 'application/x-www-form-urlencoded',
				},
			}
		);

		console.log(response);
	} catch (error) {
		console.error(error);
	}
}

axiosAddBtn.addEventListener('click', addUserbyAxios);
