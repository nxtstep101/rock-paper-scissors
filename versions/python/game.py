from random import randrange

def game():
    while True:
        def again():
            user_input = raw_input('Do you want to play again?')
            play_again = user_input.lower()
            if play_again == 'yes':
                return True
            elif play_again == 'no':
                return False
            else:
                print 'Please only answer \"Yes\" or \"No\"'
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
