const getBtn = document.querySelector('#get-content-btn');
const contentDiv = document.querySelector('#content');

const sendHttpRequest = (method, url) => {
	const promise = new Promise((resolve, reject) => {
		const xhr = new XMLHttpRequest();
		xhr.open(method, url);

		xhr.onload = () => {
			const users = JSON.parse(xhr.response);
			resolve(users);
		};

		xhr.send();
	});

	return promise;
};

const printUsersWithAjax = () => {
	sendHttpRequest('GET', 'http://localhost:8000/api/users').then(
		(responseData) => {
			const users = Object.values(responseData);

			users.forEach((el) => {
				const { id, username, password, registered_at } = el;

				printUsers(id, username, password, registered_at);
			});
		}
	);
};

const printUsers = (id, username, password, registered_at) => {
	contentDiv.innerHTML += `
	<div>
		<ul>
			<li><b>Id: </b>${id}</li>
			<li><b>Login: </b>${username}</li>
			<li><b>Hasło: </b>${password}</li>
			<li><b>Data rejestracji: </b>${registered_at}</li>
			<br>
		</ul>
	</div>
	`;
};

getBtn.addEventListener('click', printUsersWithAjax);
