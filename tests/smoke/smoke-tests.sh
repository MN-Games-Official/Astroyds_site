#!/usr/bin/env bash
# Smoke tests for Astroyds site
# Usage: ./tests/smoke/smoke-tests.sh [base_url]
# Default: http://localhost:8000

set -e

BASE_URL="${1:-http://localhost:8000}"
PASS=0
FAIL=0

check() {
    local desc="$1"
    local url="$2"
    local expected="$3"
    local status

    status=$(curl -s -o /tmp/smoke_body.html -w "%{http_code}" "$url" 2>/dev/null)

    if [ "$status" = "$expected" ]; then
        echo "  ✓ $desc (HTTP $status)"
        PASS=$((PASS + 1))
    else
        echo "  ✗ $desc — expected $expected, got $status"
        FAIL=$((FAIL + 1))
    fi
}

check_content() {
    local desc="$1"
    local url="$2"
    local fragment="$3"

    curl -s "$url" > /tmp/smoke_body.html 2>/dev/null
    if grep -q "$fragment" /tmp/smoke_body.html; then
        echo "  ✓ $desc (contains '$fragment')"
        PASS=$((PASS + 1))
    else
        echo "  ✗ $desc — missing '$fragment'"
        FAIL=$((FAIL + 1))
    fi
}

echo "=== Astroyds Smoke Tests ==="
echo "Base URL: $BASE_URL"
echo ""

echo "[Pages — HTTP 200]"
check "Homepage"              "$BASE_URL/"                              "200"
check "About"                 "$BASE_URL/about.php"                     "200"
check "Companies index"       "$BASE_URL/companies/"                    "200"
check "IDLE"                  "$BASE_URL/companies/idle.php"            "200"
check "RIFT"                  "$BASE_URL/companies/rift.php"            "200"
check "BulletPROOF"           "$BASE_URL/companies/bulletproof.php"     "200"
check "Research"              "$BASE_URL/research/"                     "200"
check "Safety"                "$BASE_URL/safety.php"                    "200"
check "Blog"                  "$BASE_URL/blog/"                         "200"
check "Contact"               "$BASE_URL/contact.php"                   "200"
check "Privacy"               "$BASE_URL/privacy.php"                   "200"
check "Terms"                 "$BASE_URL/terms.php"                     "200"
check "Sitemap"               "$BASE_URL/sitemap.php"                   "200"
check "Robots.txt"            "$BASE_URL/robots.txt"                    "200"
check "Manifest"              "$BASE_URL/manifest.webmanifest"          "200"

echo ""
echo "[Content checks]"
check_content "Homepage has title"     "$BASE_URL/"            "Astroyds"
check_content "Homepage has tagline"   "$BASE_URL/"            "Moving humanity forward"
check_content "Privacy has GDPR"       "$BASE_URL/privacy.php" "GDPR"
check_content "Sitemap is XML"         "$BASE_URL/sitemap.php" "urlset"
check_content "Robots has sitemap"     "$BASE_URL/robots.txt"  "Sitemap"

echo ""
echo "[Contact endpoint]"
check "GET rejected"  "$BASE_URL/src/php/contact-endpoint.php"  "405"

echo ""
echo "=== Results: $PASS passed, $FAIL failed ==="

if [ "$FAIL" -gt 0 ]; then
    exit 1
fi
exit 0
