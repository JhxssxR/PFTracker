document.querySelectorAll('.toggle-checkbox').forEach(toggle => {
  toggle.addEventListener('change', () => {
    console.log(`${toggle.id} is now ${toggle.checked ? 'enabled' : 'disabled'}`);
  });
});
