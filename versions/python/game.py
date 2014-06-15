from random import randrange

while True:
    user_reply = raw_input('Rock, Paper, or Scissors?')
    reply = user_reply.lower()
    cpu = randrange(3)
    if reply == 'rock' and cpu == 0 or reply == 'paper' and cpu == 1 or reply == 'scissors' and cpu == 2:
        print 'Its a tie'
        print cpu, reply
    elif reply == 'rock' and cpu == 1 or reply == 'paper' and cpu == 0 or reply == 'scissors' and cpu == 0:
        print 'You lose'
        print cpu, reply
    elif reply == 'rock' and cpu == 2 or reply == 'paper' and cpu == 0 or reply == 'scissors' and cpu == 1:
        print 'You win'
        print cpu, reply
    else:
	print "Please type either rock, paper, or scissors"
