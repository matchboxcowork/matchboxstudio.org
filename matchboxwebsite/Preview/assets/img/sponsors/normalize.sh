#!/usr/bin/env bash
for i in `ls *.png`; do convert $i -modulate 100,0 -normalize $i; done
