from random import randrange
user = raw_input('Rock, Paper, or Scissors?')
reply = user.lower()
cpu = randrange(2)
if reply == 'rock':
    if cpu == 0:
        print "It's a tie"
    elif cpu == 1:
        print 'You win'
    else:
        print 'You lose'
elif reply == 'paper':
    if cpu == 0:
        print 'You win'
    elif cpu == 1:
        print "It's a tie"
    else:
        print 'You lose'
else:
    if cpu == 0:
        print 'You lose'
    elif cpu == 1:
        print 'You win'
    else:
        print "It's a tie"
