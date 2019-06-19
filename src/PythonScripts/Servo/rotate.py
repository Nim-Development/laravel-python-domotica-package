import json
import sys

# Catch arg
servo = sys.argv[1]
rotation = sys.argv[2]

if 0 == 0:
    print json.dumps({'status':1, 'servo_rotation': rotation, 'servo': servo, 'time': "00:34:12"})
else:
    print json.dumps({'status':0})