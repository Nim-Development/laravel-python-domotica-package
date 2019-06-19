import json
import sys

# Catch arg
relay = sys.argv[1]

if 0 == 0:
    print json.dumps({'status':1, 'relay_status': 1, 'relay': relay, 'time': "00:34:12"})
else:
    print json.dumps({'status':0})