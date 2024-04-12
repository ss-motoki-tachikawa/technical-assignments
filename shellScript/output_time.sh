#!/bin/bash

if [ 12 -gt $(date '+%H') ]; then
    ls -la > ls.txt
else
    echo "$(date '+%Y-%m-%d-%H-%M')"
fi