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
