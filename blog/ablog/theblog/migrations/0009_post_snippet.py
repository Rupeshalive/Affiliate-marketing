# Generated by Django 3.0.6 on 2020-06-15 08:06

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('theblog', '0008_auto_20200615_1319'),
    ]

    operations = [
        migrations.AddField(
            model_name='post',
            name='snippet',
            field=models.CharField(default='Click Link Above To Read Blog Post... ', max_length=255),
        ),
    ]
