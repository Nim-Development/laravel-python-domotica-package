import json
import sys

# Catch arg
servo = sys.argv[1]

if 0 == 0:
    print json.dumps({'status':1, 'servo': servo, 'time': "00:34:12"})
else:
    print json.dumps({'status':0})