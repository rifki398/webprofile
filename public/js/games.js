window.addEventListener('DOMContentLoaded',()=>{
    const tilles=Array.from(document.querySelectorAll('.tille'));
    const playerDisplay=document.querySelector('.display-player');
    const resetButton=document.querySelector('#reset');
    const announcer=document.querySelector('.display-winner');

    let board=['','','','','','','','',''];
    let currentPlayer='X';
    let isGameActive=true;

    const PLAYERX_WON='PLAYERX_WON';
    const PLAYERO_WON='PLAYERY_WON';
    const TIE='TIE';

    const winningConditions = [
        [0,1,2],
        [3,4,5],
        [6,7,8],
        [0,3,6],
        [1,4,7],
        [2,5,8],
        [0,4,8],
        [2,4,6]
    ];

    function handleResultValidation(){
        let roundWon = false;
        for(let i=0;i<=7;i++){
            const winConditions = winningConditions[i];
            const a = board[winConditions[0]];
            const b = board[winConditions[1]];
            const c = board[winConditions[2]];
            console.log(a);
            console.log(b);
            console.log(c);
            if(a===''||b===''||c===''){
                continue;
            }
            if(a===b && b===c){
                roundWon=true;
                break;
            }
        }
        if(roundWon){
            announce(currentPlayer === 'X' ? PLAYERX_WON : PLAYERO_WON);
            isGameActive=false;
            return;
        }
        if(!board.includes(''))
            announce(TIE);
        
    };

    const announce = (type) => {
        switch (type){
            case PLAYERO_WON:
                announcer.innerHTML='<b>Player <span class="playerO">O</span> Won</b>';
                break;
            case PLAYERX_WON:
                announcer.innerHTML='<b>Player <span class="playerX">X</span> Won</b>';
                break;
            case TIE:
                announcer.innerHTML='<b>Game Tie!</b>';
        }
        announcer.classList.remove('hide-name')
    };

    const isValidAction = (tille) => {
        if(tille.innerText === 'X' || tille.innerText==='O'){
            return false;
        }
        return true;
    };

    const updateBoard = (index) => {
        board[index]=currentPlayer;
    };

    const changePlayer = () => {
        playerDisplay.classList.remove(`player${currentPlayer}`);
        currentPlayer = currentPlayer === 'X' ? 'O' : 'X';
        playerDisplay.innerText = currentPlayer;
        playerDisplay.classList.add(`player${currentPlayer}`);
    };
    
    const userAction=(tille,index)=>{
        if(isValidAction(tille) && isGameActive){
            tille.innerText = currentPlayer;
            tille.classList.add(`player${currentPlayer}`);
            updateBoard(index);
            handleResultValidation();
            changePlayer();
        }
    };

    const resetBoard = () => {
        board=['','','','','','','','',''];
        isGameActive=true;
        announcer.classList.add('hide-name');
        if(currentPlayer==='O'){
            changePlayer();
        }
        tilles.forEach(tille => {
            tille.innerText='';
            tille.classList.remove('playerX');
            tille.classList.remove('playerO');
        });
    }
    tilles.forEach((tille,index)=>{
        tille.addEventListener('click',()=>userAction(tille,index));
    });
    resetButton.addEventListener('click',resetBoard);
});