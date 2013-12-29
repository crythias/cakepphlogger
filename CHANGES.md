 12-29-2013

Beginnings of auth. Schema updates from some existing pphlogger tables. This is for expected compatibility and import from pphlogger.
Do not expect anything of importance yet. This is merely the ability to show that authentication is in the process of being set up.

Longer term, the idea is that one would be able to reasonably import pphlogger database files with minimal changes.

Already one schema change has been implemented: The MySQL proprietary enum field has been changed to a 1 character varchar. 

Please note that this is being done in my spare time, so expect things to break as they are being updated.
