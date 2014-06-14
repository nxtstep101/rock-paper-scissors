from random import randrange

def game():
    while True:
        user = raw_input('Rock, Paper, or Scissors?')
        reply = user.lower()
        cpu = randrange(2)
        if reply == 'rock':
            if cpu == 0:
                print 'It\'s a tie'
                again()
            elif cpu == 1:
                print 'You win'
                again()
            else:
                print 'You lose'
                again()
        elif reply == 'paper':
            if cpu == 0:
                print 'You win'
                again()
            elif cpu == 1:
                print 'It\'s a tie'
                again()
            else:
                print 'You lose'
                again()
        elif reply == 'scissors':
            if cpu == 0:
                print 'You lose'
                again()
            elif cpu == 1:
                print 'You win'
                again()
            else:
                print 'It\'s a tie'
                again()
        else:
            print 'Please type either Rock, Paper, or Scissors'
game()
