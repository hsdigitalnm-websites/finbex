from PIL import Image, ImageDraw

src_path = r'C:\Users\Dell\.gemini\antigravity-ide\brain\ba1d6d95-22d0-41e6-a4e6-bde3111f5cb6\.user_uploaded\media_1787742486474.png'
dest_dir = r'c:\xampp\htdocs\gvs\finbex\public\assets\images'

img = Image.open(src_path).convert('RGBA')
width, height = img.size

# 1. Remove the Gemini watermark at the bottom right (x: 930..1024, y: 470..558)
# We copy clean background column from x=900 to blend
for x in range(930, width):
    for y in range(470, height):
        # Sample from left clean background
        ref_x = 900 + (x % 15)
        img.putpixel((x, y), img.getpixel((ref_x, y)))

# 2. Find bounding box of logo pixels
min_x, min_y, max_x, max_y = width, height, 0, 0
bg_color = img.getpixel((20, 20)) # background dark blue

for x in range(width):
    for y in range(height):
        p = img.getpixel((x, y))
        # Check if significantly different from background (luminance difference)
        diff = abs(p[0] - bg_color[0]) + abs(p[1] - bg_color[1]) + abs(p[2] - bg_color[2])
        if diff > 50:
            if x < min_x: min_x = x
            if x > max_x: max_x = x
            if y < min_y: min_y = y
            if y > max_y: max_y = y

# Add padding
pad_x = 30
pad_y = 20
crop_x0 = max(0, min_x - pad_x)
crop_y0 = max(0, min_y - pad_y)
crop_x1 = min(width, max_x + pad_x)
crop_y1 = min(height, max_y + pad_y)

logo_cropped = img.crop((crop_x0, crop_y0, crop_x1, crop_y1))

# Save logo.png
logo_path = dest_dir + r'\logo.png'
logo_cropped.save(logo_path, format='PNG')
print(f'Saved logo.png: size={logo_cropped.size}, cropped from ({crop_x0}, {crop_y0}, {crop_x1}, {crop_y1})')

# Also save full banner logo
full_logo_path = dest_dir + r'\logo_full.png'
img.save(full_logo_path, format='PNG')
print(f'Saved logo_full.png: size={img.size}')

# Create favicon from the gold B and upward arrow mark
favicon = logo_cropped.resize((64, 64), Image.Resampling.LANCZOS)
favicon.save(dest_dir + r'\favicon.png', format='PNG')
print('Saved favicon.png')
