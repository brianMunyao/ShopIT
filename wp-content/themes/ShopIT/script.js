const account_drop = document.getElementById('account-drop');
const account_btn = document.getElementById('account-btn');
account_btn.addEventListener('click', () => {
	account_drop.style.display =
		account_drop.style.display === 'flex' ? 'none' : 'flex';
});

account_drop.addEventListener('mouseleave', () => {
	setTimeout(() => {
		account_drop.style.display = 'none';
	}, 2000);
});
