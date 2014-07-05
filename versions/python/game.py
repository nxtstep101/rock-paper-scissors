import random

while True:
    user_reply = raw_input('Rock, Paper, or Scissors?')
    reply = user_reply.lower()
    choices = ['rock', 'paper', 'scissors']
    cpu = random.choice(choices)
    if reply == 'rock' and cpu == 'rock' or reply == 'paper' and cpu == 'paper' or reply == 'scissors' and cpu == 'scissors':
        print 'Its a tie\nYou: %s\nCPU: %s' % (reply, cpu)
    elif reply == 'rock' and cpu == 'paper' or reply == 'paper' and cpu == 'scissors' or reply == 'scissors' and cpu == 'rock':
        print 'You lose\nYou: %s\nCPU: %s' % (reply, cpu)
    elif reply == 'rock' and cpu == 'scissors' or reply == 'paper' and cpu == 'rock' or reply == 'scissors' and cpu == 'paper':
        print 'You win\nYou: %s\nCPU: %s' % (reply, cpu)
    else:
        print "Please type either rock, paper, or scissors"
