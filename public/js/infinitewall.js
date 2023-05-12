const container = document.getElementById('container');
const loading = document.querySelector('.loading');
let isLoading = false; // Flag to track the loading state
const loadingBalls = document.querySelectorAll('.ball')

for (let i = 0; i < 5; i++) {
    getPost();
}

window.addEventListener('scroll', () => {
    const { scrollTop, scrollHeight, clientHeight } = document.documentElement;

    if (!isLoading && clientHeight + scrollTop >= scrollHeight - 5) {
        showLoading();
    }
});

function showLoading() {
    isLoading = true; // Set loading state to true
    loading.classList.add('show');
	
    // Change the size of loading balls
    loadingBalls.forEach(ball => {
        const size = getRandomSize(13, 17); // Generate a random size between 10 and 30 pixels
        ball.style.width = `${size}px`;
        ball.style.height = `${size}px`;
    });

    // load more data
    setTimeout(() => {
        getPost();
        isLoading = false; // Set loading state back to false after loading is complete
    }, 700);
}

function getRandomSize(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}


async function getPost() {
	// const postResponse = await fetch('postdata.json')
    // const postData = await postResponse.json()
	// console.log(postData)

    const postResponse = await fetch(`https://jsonplaceholder.typicode.com/posts/${getRandomNr()}`);
	const postData = await postResponse.json();
	
	const userResponse = await fetch('https://randomuser.me/api');
	const userData = await userResponse.json();

	//console.log(postData)
	
	const data = { post: postData, user: userData.results[0] };
	
	addDataToDOM(data);
}

function getRandomNr() {
	return Math.floor(Math.random() * 100) + 1;
}

function addDataToDOM(data) {
	const postElement = document.createElement('div');
	postElement.classList.add('blog-post');
	postElement.innerHTML = `
	    <div class="watch-thread">
		<i class="fa-solid fa-arrows-to-eye"></i>
		<i class="fa-solid fa-maximize"></i>
		</div>
		<h2 class="title">
		<a class="post-title-link">${data.post.title}</a></h2>
		<p class="text">${data.post.body}</p>
		<div class="extras">
		<div class="variations">
		<i class="fa-solid fa-arrow-up" id="vote-up"></i>
	    <i class="fa-solid fa-arrow-down" id="vote-down"></i>
		<i class="fa" id="icon-gap">&#xf1e0;</i>
		<i class="fa-solid fa-link" id="icon-gap"></i>
		<i class="fa-solid fa-comments" id="icon-gap"></i>
		<i class="fa-solid fa-flag" id="reportflag" style="margin-left:.3rem;"></i>
		</div>
		<div class="user-info">
		<i class="fa-solid fa-award" id="award"></i>
			<img src="${data.user.picture.large}" alt="${data.user.name.first}" />
			<span class="user-profile">${data.user.name.first} ${data.user.name.last}</span>
			
		</div>
		</div>`
		;
	container.appendChild(postElement);
	
	loading.classList.remove('show');
}