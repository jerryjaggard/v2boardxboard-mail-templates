#!/bin/bash

# This script will help us understand the structure better
echo "Analyzing template structure..."
echo "Total themes: $(ls -d */ | grep -v .git | wc -l)"
echo "Templates per theme:"
ls modern/ | head -5
echo ""
echo "Sample variable usage in templates:"
grep -h '\$[a-z]*' modern/notify.blade.php | head -5
