let button = document.getElementById('up-down-button');
        let up = document.getElementById('up');
        let down = document.getElementById('down');
        let newDiv = document.getElementById('new-div');
        down.style.display = 'block';
        up.style.display = 'none';
        if (button) {
            button.addEventListener('click', () => {
                if (up.style.display == 'block' && down.style.display == 'none') {
                    up.style.display = 'none';
                    down.style.display = 'block';
                } else {
                    up.style.display = 'block';
                    down.style.display = 'none';
                }

            });
        }