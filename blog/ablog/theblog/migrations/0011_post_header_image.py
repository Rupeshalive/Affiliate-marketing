# Generated by Django 3.0.6 on 2020-06-24 06:47

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('theblog', '0010_auto_20200615_1939'),
    ]

    operations = [
        migrations.AddField(
            model_name='post',
            name='header_image',
            field=models.ImageField(blank=True, null=True, upload_to='images/'),
        ),
    ]
